/* hexgen.cpp
 * generates a hex file compatible with VGA GENERATOR project provided by XESS
 * VGA monitor should show 4 coloured stripes, red, green, blue, white
 * Author: Luke Krasnoff
 * luke.krasnoff@oksana.com.au
 * Date: 6/6/02 */

#include "stdafx.h" /* only needed my Microsoft Visual C++ */
#include <stdio.h>
#include <conio.h>


#define OUTPUT_FILE "stripes.hex"
#define MODE "w"
#define MAX_COLOUR 15
#define ROWS_PER_COLOUR 7680
#define BYTES_PER_LINE 16


void main(void)
{
	FILE *fout;
	
	int j, k, colour;
	int	line_num = 0;

	if((fout=fopen(OUTPUT_FILE, MODE)) == NULL)
		printf("Error. Can't create %s\n", OUTPUT_FILE);
	else
	{
		printf("Created %s ok.\n", OUTPUT_FILE);
		for(colour=0; colour<=MAX_COLOUR; colour+=5)
		{
			for(j=0; j<ROWS_PER_COLOUR; j++)
			{
				fprintf(fout, "- 10 %04X", line_num++);
				for(k=0; k<BYTES_PER_LINE; k++)
				{
					fprintf(fout, " %1X%1X", colour, colour);	
				}
				fprintf(fout,"\n");
			}
		}
		printf("Colour information sent to file.\n");
		printf("That is, 4 stripes - red, green, blue, white.\n");
		if(fclose(fout) == EOF)
		{
			printf("Error. Can't close %s\n", OUTPUT_FILE);
		}
		else
		{
			printf("%s closed ok.\n", OUTPUT_FILE);
		}

	}
	getch();
}
